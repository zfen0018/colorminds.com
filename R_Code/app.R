library(shiny)
library(grid)
library(png)
library(jpeg)
library(colorBlindness)
library(shiny)

options(shiny.maxRequestSize = 30*1024^2)

shinyApp(
   ui = shinyUI(  
        
        fluidPage( 
        
            fileInput("myFile", "Choose a Image file to upload: ", accept = c('image/png', 'image/jpeg')),
            tags$style(type="text/css",
                       ".shiny-output-error { visibility: hidden; }",
                       ".shiny-output-error:before { visibility: hidden; }"
            ),
            plotOutput('p1'),
            actionButton('switchtab',"Try again! ",  class = "btn-danger")
            
        )
    ),
    
    server = shinyServer(function(input, output,session){
            data <- reactive({readJPEG(input$myFile$datapath)})
            output$p1 <- renderPlot({
            g <- rasterGrob(data(), interpolate=TRUE)
            grid.draw(cvdPlot(g, 
                              layout = c("origin", "deuteranope", "protanope", "desaturate", "enhanced.desaturate",
                                         "enhanced", "enhanced.deuteranope", 
                                         "enhanced.protanope")))
          # plot(q)
        })
            
             observeEvent(input$switchtab,{
                    session$reload()
                
            })
    })
)
