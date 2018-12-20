<!DOCTYPE html>
<html>
<head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href= "{{ asset('css/app.css') }}" rel="stylesheet">   
    <script type="text/javascript" src="<?php echo asset('js/app.js')?>"></script>
    <title>Some title, i dont know yet</title>

</head>
<body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/home">AWESOME PROJECT</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/library">Library</a>
          </li>
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Portfolio
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="portfolio-1-col.html">1 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-2-col.html">2 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-3-col.html">3 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-4-col.html">4 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-item.html">Single Portfolio Item</a>
            </div>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>
    <!-- <form class="form-group" action="/">
        {{ csrf_field() }}
        <label>
            Title:
            <input type="text" name="title">
        </label>
        <br>
        <label>
            Image:
            <input type="file" name="image">
        </label>
         <br>
        <label>
            Edition:
            <input type="text" name="edition">
        </label>
         <br>
        <label>
            ISBN:
            <input type="text" name="isbn">
        </label>
         <br>
        <label>
            Sinopsis:
            <textarea name="sinopsis"></textarea>
        </label>
         <br>
        <label>
            Pages:
            <input type="number" name="pages">
        </label>
         <br>
        <label>
            Publisher:
            <select name="publisher">
            @foreach ($publishers as $publisher)
                <option value = "{{ $publisher->id }}">{{ $publisher->name }}</option>
            @endforeach
            </select>
        </label>
         <br>
        <label>
            Author:
            <select name="author">
            @foreach ($authors as $author)
                <option value = "{{ $author->id }}">{{ $author->name }}</option>
            @endforeach
            </select>
        </label>
         <br>
        <label>
            Category:
            <select name="category">
            @foreach ($categorys as $category)
                <option value = "{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
            </select>
        </label>
        <br>
        <button type="submit" name="save">Save</button>
    </form> -->
    <div class="container">
    <br>
      <!-- Page Heading/Breadcrumbs -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item"><a href="index.html">Books</a></li>
        <li class="breadcrumb-item atice">The name of the wind</li>
      </ol>

      <div class="row">
        <div class="col-md-4">
          <div class="row">
            <img class="img-fluid" src="https://images-na.ssl-images-amazon.com/images/I/51JThzjy3gL._SX306_BO1,204,203,200_.jpg" alt="The name of the wind">
          </div>
          <div class="row">
          <div class="card my-12">
            <h5 class="card-header">Attributes</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Author</a>
                    </li>
                    <li>
                      <a href="#">Publisher</a>
                    </li>
                    <li>
                      <a href="#">Categories</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Patrick Rothfuss</a>
                    </li>
                    <li>
                      <a href="#">Someone</a>
                    </li>
                    <li>
                      <a href="#">Fiction</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
        <div class="col-md-8">
          <h3 class="my-3">The name of the wind</h3>
          <p style="text-align: justify">The Name of the Wind (The Kingkiller Chronicle: Day One) is a fantasy novel in the grand tradition. Author Patrick Rothfuss places an emphasis on world building seldom seen even in fantasy epics.

          Set in an indeterminate time, Chronicler, a traveling scribe, is traversing the country collecting stories. After being attacked by arachnid monsters called Scrael, Chronicler is saved by an innkeeper named Kote. The innkeeper soon reveals that he is actually Kvothe, a person of legendary import. He is an elite swordsman, but is also highly skilled in magic and musicianship. There have been claims that once Kvothe killed a king, and that act is what produced the war in which the land now finds itself embroiled. After Kvothe reveals himself, Chronicler asks for the honor of recording his story for posterity. Kvothe agrees, with one minor caveat: his is a long tale, and will take three days to relate. <br><br>

          In his youth, Kvothe apprenticed with a traveling group of actors, similar to the troupe in Ingmar Bergman’s The Seventh Seal. They go by the name of the Edema Ruh. When a scholar named Abenthy joins them, Kvothe learns that magic is a reality. Abenthy practices a mélange of disciplines that, conjointly, are known as “sympathy.” Of all the startling abilities that Kvothe witnesses, it is the eponymous skill, The Name of the Wind, that he is most desperate to master. Anyone who learns The Name of the Wind can summon it to his aid.<br><br>

          The Edema Ruh are soon slaughtered by the Chandrian, a group of seven evil beings who were supposedly mythical. Kvothe is the only survivor. The experience has badly damaged his psyche, and he spends the next three years in a city as a beggar, slowly recovering. Eventually, having saved every cent he earns, he makes his way to an institution of arcane learning known as the country’s “university.” On the way he meets a young woman named Denna, and becomes enamored of her.<br><br>

          Kvothe tests well and is able to enter the university, where he learns magic, history, and more. He becomes embroiled in bitter rivalries with a student named Ambrose, at the root of which lay Kvothe’s poverty, intellect, and unwillingness to back away from altercations. It is in the depths of the university’s sprawling library archives that he begins his research into the Chandrian. Soon his antics get him banned from the archives, halting his studies.<br><br>

          In order to earn money, Kvothe buys a lute and begins performing at a local tavern. He encounters Denna again, and their relationship grows. In the tavern, Kvothe hears rumors of a tragic wedding. The slaughter of the guests shares similarities with the attack on the Edema Ruh. In Kvothe’s subsequent investigation of the site, he encounters a savage beast, a Draccus. It nearly manages to obliterate the town before he is able to kill it.<br><br>

          When he returns to the University, Kvothe gets into a fight with Ambrose. During the conflict he is able to summon the wind, breaking Ambrose’s arm. Professor Elodin, who is responsible for teaching the most advanced magic, and who rarely takes on students, takes Kvothe as one of his pupils. At this point, the novel reverts to present day, where Kvothe has finished telling the first installment of his story.<br><br>

          The Name of the Wind is heavily rooted in themes of education – what is “true” learning and what is mere bookishness – duty, history, the nobility in the pursuit of knowledge, and perhaps most importantly, apathy. Throughout the telling, Kvothe aggressively downplays his importance. The reader knows that Kvothe is a vaunted figure, as do the Chronicler and Bast, Kvothe’s assistant and student. And yet, it is impossible not to wonder what he has seen, and done, that have rendered him insensate to his own legend. Indeed, after the day is over, Bast intrudes into Chronicler’s room and insists that, on the following day’s story, he prod Kvothe into discussing the heroic aspects of his history. This, Bast hopes, will break Kvothe out of his cynicism and disdain for much of what he has lived.<br><br>

          This is a big novel, which is typically the case when an author has audaciously set out to build an entire world within a book. Rothfuss is known for his meticulous editing and for completing many drafts of his works before publishing. It shows. The Name of the Wind has an incredible sense of verisimilitude, as if Rothfuss lived for a great deal of time in his fictional country before recording it. It is impossible to come away not having truly come to know the characters. Praise for The Name of the Wind has been very positive, and Rothfuss received the prestigious Quill Award for the novel in 2007.<br> <br></p>
        </div>

      </div>
      <!-- /.row -->

      <!-- Related Projects Row -->
      <h3 class="my-4">Related Projects</h3>

      <div class="row">

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
        </div>

      </div>
    </div>
</body>
</html>