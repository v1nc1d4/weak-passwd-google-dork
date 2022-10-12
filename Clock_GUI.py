
from tkinter.ttk import*
from time import strftime
from tkinter import Label, Tk

#======= Configuring window ========
def window(self):
       
    window = Tk()
    window.title("Digital Clock")
    window.geometry("600x250")
    window.configure(bg="darkred")
    window.resizable(False, False)

clock_label = Label(window, bg="dark red", fg="white", font = ("Times", 100, 'bold'), relief='flat')
clock_label.place(x = 20, y = 20)
update_label()
window.mainloop()
