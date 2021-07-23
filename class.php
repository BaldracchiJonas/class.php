<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> <h1> Welcome </h1></title>
  </head>
  <body>
    <?php

    class Book{
      private $title;
      private $author;
      private $pages;

      function __construct($bName,$bAuthor,$bPages){
        $this->title=$bName;
        $this->author=$bAuthor;
        $this->setPages($bPages);
      }

      function getTitle()
      {
        echo "$this->title <br>";
      }

      function getPages()
      {
        echo "$this->pages <br>";
      }

      function setPages($pages)
      {
        if($pages>0)
        {
          $this->pages=$pages;
        }
        else {
          $this->pages="Error";
        }
      }

      function hasMoreThan400Pages()
      {
        if($this->pages>400)
        {return "true <br>";}
        return "false <br>";
      }
    }

    class Magazine extends Book{ //inheritance
      private $date;

      function setDate($date)
      {
        $this->date=$date;
      }

      function getDate()
      {
        echo "$this->date <br>";
      }
    }

    $book1= new Book("Harry Potter","JK Rowling",250);
    $book2= new Book("Narnia","C.S. Lewis",250);
    $magazine= new Magazine("People","People.com",40);

    $book1->setPages(500);
    $book1->getTitle();
    $magazine->setDate("7/23/21");

    echo "Has more than 400 pages: ";
    echo $book1->hasMoreThan400Pages();
    $book1->getPages();
    echo "<br>";

    $book2->getTitle();
    echo "Has more than 400 pages: ";
    echo $book2->hasMoreThan400Pages();
    $book2->getPages();
    echo "<br>";

    $magazine->getTitle();
    echo "Has more than 400 pages: ";
    echo $magazine->hasMoreThan400Pages();
    $magazine->getPages();
    echo "date:";
    $magazine->getDate();
     ?>
  </body>
</html>
