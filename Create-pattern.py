import turtle
import random

screen = turtle.Screen()
screen.bgcolor("white")

t = turtle.Turtle()
t.speed(1)

colors = ["red", "blue", "green", "orange", "purple",
          "pink", "yellow", "brown", "cyan", "magenta"]

for x in range(0, 10):
    t.penup()
    t.goto(0, 0)
    t.pendown()

    border_color = "black"
    t.color(border_color, random.choice(colors))
    t.begin_fill()
    for i in range(0, 8):
        t.forward(50)
        t.right(45)
    t.end_fill()
    t.right(36)
    turtle.delay(10)

t.hideturtle()

turtle.exitonclick()
