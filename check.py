import turtle
import time

# Initialize the turtle object
tt = turtle.Turtle()

# Set the text color and font size
text_color = "Yellow"
font_size = 25

# Set the starting position
start_x = -200
start_y = 10

# Define the text to write
text = "📚Kanram  Academy📚"

# Set the delay between each letter (in seconds)
delay = 0.5

# Set up the turtle
turtle.bgcolor("black")  # Set the background color to black
tt.penup()
tt.goto(start_x, start_y)
tt.color(text_color)
tt.pendown()

# Write each letter slowly in a row
for letter in text:
    tt.write(letter, align="left", font=("Arial", font_size, "bold"))
    tt.penup()
    # Move forward by the font size plus a small spacing
    tt.forward(font_size + 5)
    tt.pendown()
    time.sleep(delay)

# Hide the turtle
tt.hideturtle()

# Exit on click
turtle.exitonclick()
