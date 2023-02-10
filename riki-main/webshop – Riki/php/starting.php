<div class="container-fluid">
    <div class="row">
        <div class="heading-top-picks">
            <h1>Top listed items</h1>
            <h3>Our top picks for this month</h3>
        </div>
        <?php $pdo=require_once("./php/connect/connect.php");
            $sql="SELECT * FROM items";
            $statement=$pdo->query($sql);
            $result=$statement->fetchAll();
            if($result){
                foreach($result as $key){
                    echo' <div class="col">
                    <section class="items-section">
                        <div class="items">
                            <img src="'. $key["image_url"] .'"><br>
                            <span><b>'. $key["name"].'</b></span> <br>
                            <span>'. $key["price"] .'</span>$ <br><br>
                            <form method="post">
                                <input type="submit" name="addtocart" value="Add to card">
                            </form>
                        </div>
                    </section>
                </div>';
                }
            }
        ?>
    </div>
    <div class="row">
        <div class="col">
            <div class="text-part">
                <h1>Something about us...</h1>
                <p>Our company is a leading retailer of Apple iPhones. We offer a wide range of models to suit different needs and budgets, including the latest iPhone 12 series. With a focus on customer satisfaction, we provide fast and reliable shipping, a hassle-free return policy, and expert support to help customers make informed purchasing decisions. Our team of knowledgeable sales associates is always available to answer any questions and provide expert advice on the latest iPhone features and accessories. Whether you're looking for a new smartphone for personal use or for your business, we've got you covered. Visit us today to experience the best in iPhone technology. </p>
            </div>
        </div>
        <div class="col">
            <div class="champions-image-div">
                <img src="./images/apple.png" alt="champions" class="champions">
            </div>
        </div>
    </div>
</div>
