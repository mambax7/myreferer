<ul>
    <{foreach item=block from=$block.contents}>
        <li>
            <a href="<{$block.link}>"><{$block.subject}></a>
        </li>
    <{/foreach}>
</ul>
