<?php
  get_header();
?>

<style>
   {
    color: grey;
  }
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
  
  .single-header{
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
  <!-- <a id="news" href="index.html"> -->
    <div style="margin: 50px 120px;">
    <div style="margin-top: 15px;
            display: flex;
            padding: 2%;
            padding-top: 0px;">
      <img src="./download.jpg" width="300px" height="300px" class="mainIMG">
      
      <div style="flex-basis: 50%;
                margin: 15pt;
                padding: 10pt;
                padding-left: 40px;">
        <h2 class="date">December 28th</h2>
        <h1 class="single-header">World Peace Day</h1>
        <p class="subtletxt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore fugiat officiis cumque eum est nam quae officia debitis amet cum!</p>
        
      </div>
    </div>
    <hr>
    <div style="margin-top: 15px;
            display: flex;
            padding: 2%;
            padding-top: 0px;">
      <p class="maintxt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio accusantium beatae asperiores assumenda exercitationem, doloribus impedit ipsam error. Sequi dolores tempora tenetur consequuntur corporis tempore voluptatem harum quas, accusamus repellendus a nulla et minima quidem minus nisi, quod veritatis ut? Numquam obcaecati alias aspernatur cupiditate quae veritatis earum perspiciatis inventore.</p>
    </div>
    
    
  </div>
<!-- </a> -->

<?php
echo paginate_links();
  get_footer();
?>