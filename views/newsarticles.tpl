<section id='story'>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {foreach from=$result item=oneItem}
   <h1>Verhaal van de week</h1>
    <h2>{$oneItem.title}</h2>
    <p>{$oneItem.Writer}</p>
    <content id="Content">{$oneItem.content|truncate:562}</content>
    <br></br>
    <img id="images"src=img/{$oneItem.image}>
    <br></br>
    
    <p>{$oneItem.date_created|date_format:"%d %B %Y"}</p>
    
    {/foreach}
</section>


