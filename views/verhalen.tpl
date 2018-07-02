<br></br>

 {$i = 0}
  {foreach from=$result2 item=oneItem}
  {if $i eq 0}
  
   <section id="left">
    <h2>{$oneItem.title}</h2>
    <p>{$oneItem.Writer}</p>
    <content>{$oneItem.content|truncate:250}</content>
    <br></br>

    <p>{$oneItem.date_created|date_format:"%d %B %Y"}</p>
    </section>
    {$i = 1}
    {else}
    <br>
    <section id="right">
    <h2>{$oneItem.title}</h2>
    <p>{$oneItem.Writer}</p>
    <content>{$oneItem.content|truncate:250}</content>
    <br></br>

    <p>{$oneItem.date_created|date_format:"%d %B %Y"}</p>
    </section>
    {$i = 0}
    {/if}
    {/foreach}