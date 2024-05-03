# This is a sample Python script.

# Press Mayús+F10 to execute it or replace it with your code.
# Press Double Shift to search everywhere for classes, files, tool windows, actions, and settings.
from behave.__main__ import main as behave_main


def main():
    behave_main(["features", '-t @Caso2', '-k'])


if __name__ == '__main__':
    main()