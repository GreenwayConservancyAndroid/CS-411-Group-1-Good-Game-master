<?php
// Start the session
session_start();
?>


<!DOCTYPE html>

<html class="en-us nojs us en amr" lang="en-US">
<head>
    <meta name="viewport" content="width=1024" />
    <title>Search  - GoodGame (U.S.)</title>

    <title>Game Search</title>


    <!--[if gte IE 9]> FOR THE HEADER <!-->
    <link rel="stylesheet" href="https://store.storeimages.cdn-apple.com/4234/store.apple.com/rs/rel/base.css" media="screen, print" />
    <!--<![endif]-->
    <!--[if gte IE 9]><!-->
    <link rel="stylesheet" href="https://store.storeimages.cdn-apple.com/4234/store.apple.com/rs/rel/signin.css" media="screen, print" />
    <!--<![endif]-->




</head>
<?php
function test_input2($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$user = $_SESSION["userID"];
echo $user;
$profileOwner = test_input2($_SESSION["userID"]);
?>
<body class="interim login">
<form action="search.php" method="get" >



    <div id="page">


        <nav aria-label="Global Navigation" role="navigation" lang="en-us" class="globalheader stack-item gh-selected-tab-store" id="globalheader">
            <div id="gh-content" class="gh-content">

                <div class="gh-nav">
                    <div class="gh-nav-view stack-item-body" >
                        <ul id="gh-nav-list" class="gh-nav-list">

                            <li class="gh-tab">
                                <BR>
                                <a href="logout.php" class="gh-tab-link"><span class="gh-tab-inner"><FONT COLOR="#FFFFFF">Logout</FONT></span></span></a>
                            </li>

                            <li class="gh-tab">
                                <BR>
                                <script type="text/javascript">
                                    var php_var = "<?php echo $user; ?>";
                                    document.write('<a class="gh-tab-link" href="userPageDisplay.php?profileOwner=' + php_var + '"><span class="gh-tab-inner"><FONT COLOR="#FFFFFF">Home</FONT></span></span></a>')
                                    </script>
                                </li>

                            <li class="gh-tab">
                                <BR>
                                <a href="searchForm.php" class="gh-tab-link"><span class="gh-tab-inner"><FONT COLOR="#FFFFFF">Search</FONT></span></span></a>
                            </li>
                            <li class="gh-tab">
                                <BR>
                                <a href="registration.php" class="gh-tab-link"><span class="gh-tab-inner"><FONT COLOR="#FFFFFF">Register</FONT></span></span></a>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
        </nav>


        <div class="store-header clearfix">

            <div class="masthead clearfix">
                <div class="masthead-title">
                    <font size="5" face="Fantasy"><font size="6">G</font>ood &nbsp  <font size="6">G</font>ame</font>

                </div>

            </div>
        </div>


        <div id="container">
            <div role="main" class="accountbox">
                <div id="account-page-header">Search</div>
                <div id="account-content" class="content clearfix">
                    <table width = "50%" border="0" align="center">

                        <tr>
                            <td><input type="hidden" name="pagenum" value="1"><font size="3">Search for a game: </font></td>
                            <td><input type="text" name="search_term"><br></td>
                        </tr>
                        <tr>
                            <td><br></td>
                        </tr>
                        <tr>
                            <td><font size="3">Search in: </font></td>
                            <td><select name='type'>
                                    <option value='game'> games </option>
                                    <option value='user'> users </option>
                                </select></td>
                        </tr>
                        <tr>
                            <td><br></td>
                        </tr>

                    </table>
                </div>
                <div class="cart-navigation">
                    <input type="submit" />
                </div>
            </div>



        </div>
    </div>




</form>
</body>

</html>



