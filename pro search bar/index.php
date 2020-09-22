  <?php
$q = $_GET['q'];
    if($_GET['q'] ==""){
        header('Location: index.php?q=Search...');
    }
    
    if($_GET['q'] !==""){
    $con = mysqli_connect('localhost','root','');
    $db = mysqli_select_db($con,'search_bar_tutorial');
    
        ?>
        <html>
        <head>
        <script type = "text/javascript">
        function active(){
            var searchBar = document.getElementById('searchBar');
            if(searchBar.value == 'Search...'){
                searchBar.value = ''
                searchBar.placeholder = 'Search...'
            }
        }
        function inactive(){
            var searchBar = document.getElementById('searchBar');
            if(searchBar.value == ''){
                searchBar.value = 'Search...'
                searchBar.placeholder = ''
            }
        }
        </script>
        <style type="text/css">
        #searchBar {
            border: 1px solid #000000;
            border-right: none;
            font-size: 16px;
            padding: 10px;
            outline: none;
            width:200px;
            -webkit-border-top-left-radius: 10px;
            -webkit-border-bottom-left-radius: 10px;
            -moz-border-radius-topleft: 10px;
            -moz-border-radius-bottomleft: 10px;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
        }
        #searchBtn {
            border: 1px solid #000000;
            font-size: 16px;
            padding: 10px;
            background:#f1d829;
            font-weight:bold;
            cursor: pointer;
            outline: none;
            -webkit-border-top-right-radius: 10px;
            -webkit-border-bottom-right-radius: 10px;
            -moz-border-radius-topright: 10px;
            -moz-border-radius-bottomright: 10px;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
        }
        #searchBtn:hover {
            background: #f6e049;
        }
        body {
            font-family: arial;
        }
        h3 {
            margin: 20px 0px 0px
            padding: 0;
        }
        p{
            margin: 0;
            padding: 0;
        }
        </style>
            </head>
            <body>
                <form action="index.php" method="GET" id="searchForm" >
                    <input type="text" name="q" id="searchBar" placeholder="" value="Search..." maxlength="25" autocomplete="off" onMouseDown="active();" onBlur="inactive();"/><input type="submit" id="searchBtn" value="Go!" 
                    />
                </form>
                <?php
                        
                        $query = mysqli_query($con,"SELECT * FROM products WHERE title LIKE '%$q%' OR description LIKE '%$q%'");
                        $num_rows = mysqli_num_rows($query);
                        ?>
     <!--# results-->   <p><strong><?php echo $num_rows; ?></strong> results for '<?php echo $q; ?>'</p>
                        <?php
                        while($row = mysqli_fetch_array($query)){
                        $id = $row['id'];
                        $title = $row['title'];
                        $desc = $row['description'];

                        echo '<h3><a href="' . $title . '.php">' . $title . '</a></h3><p>' . $desc . '</p><br/>';
                        }
                ?>
            </body>
        </html>
<?php
    } 

?>

