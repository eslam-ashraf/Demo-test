<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-md-8">
                <form id="add_question_form" method="post" action="add_questions.php">
                    <input type="text" id="question" name="my_question" class=" col-md-12 m-3 form-control" placeholder="Write your question">
                    <div class="form-group">
                    <input type="text" name="answer_one" class="col-md-5 form-control answer" placeholder="Write your answer1">
                    </div>
                    <div class="form-group">
                    <input type="text" name="answer_two" class="col-md-5 form-control answer" placeholder="Write your answer2">
                    </div>
                    <div class="form-group">
                    <input type="text" name="answer_three" class="col-md-5 form-control answer" placeholder="Write your answer3">
                    </div>
                    <div class="form-group">
                    <input type="text" name="answer_four" class="col-md-5 form-control answer" placeholder="Write your answer4">
                    </div>
                    <input type="submit" id="enter_data" name="add_data" class="btn btn-primary" value="Add Question">
                </form>
            </div>
        </div>
        <div class="row">
            <div id="show-questions">
                
            </div>
        </div>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script>
    //start of show cars car form function
   setInterval(function(){
        update_questions();
    } , 1000);
    
    function update_questions(){
        $.ajax({
           url:'show_questions.php',
           type:'POST',
           success:function(show_questions){
               if(!show_questions.error){
                   $("#show-questions").html(show_questions);
               }
           }    
        });
    }
    
    </script>

</body>

</html>
