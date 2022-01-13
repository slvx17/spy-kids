<?php
  get_header();
?>

<style>
  .subtletxt{
    font-size: 25px;
    font-weight: 100;
    font-family: Arial, Helvetica, sans-serif;
  }
  
  .maintxt{
    font-size: 30px;
    margin: 20px 40px;
  }

  
  .date{
    font-size: 25px;
  }
  
  .Header{
    font-size: 50px;
    font-weight: bold;
    margin: 20px 0;
  }
  
  .toparea{
    margin-top: 5%;
    display: flex;
    padding: 2%;
  }
  
  .subtletxt{
    display: inline-block;
  }
  </style>
  <a id="news" href="index.html"><div class="container">
    <div class="row">
      <img src="./download.jpg" width="300px" height="300px" class="mainIMG">
      
      <div class="column">
        <h2 class="date">December 28th</h2>
        <h1 class="Header">World Peace Day</h1>
        <p class="subtletxt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore fugiat officiis cumque eum est nam quae officia debitis amet cum!</p>
        
      </div>
    </div>
    <hr>
    <div class="row">
      <p class="maintxt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio accusantium beatae asperiores assumenda exercitationem, doloribus impedit ipsam error. Sequi dolores tempora tenetur consequuntur corporis tempore voluptatem harum quas, accusamus repellendus a nulla et minima quidem minus nisi, quod veritatis ut? Numquam obcaecati alias aspernatur cupiditate quae veritatis earum perspiciatis inventore.</p>
    </div>
    
    
  </div></a>

<?php
echo paginate_links();
  get_footer();
?>