<{if $banner}>
    <div align="center"><{$banner}>
    <br>
    </div><{/if}>

<div class="itemHead"><{$title}> : <{$current}></div>

<div class="itemInfo">
    <div id='navcontainer'>
        <ul style='padding: 6px; margin-left: 6;'>
            <li style='list-style: none; margin: 0px; display: inline;'>
                <a href='<{$nav_index}>' style='padding: 1px 0.5em; margin-left: 1px; border: outset;'>
                    <nobr><{$summary}></nobr>
                </a>
            </li>

            <{if $numrows_referer}>
                <li style='list-style: none; margin: 0px; display: inline;'>
                    <a href='<{$nav_referer}>' style='padding: 1px 0.5em; margin-left: 1px; border: outset;'>
                        <nobr><{$referer}></nobr>
                    </a>
                </li>
            <{/if}>

            <{if $numrows_engine}>
                <li style='list-style: none; margin: 0px; display: inline; '>
                    <a href='<{$nav_engine}>' style='padding: 1px 0.5em; margin-left: 1px; border: outset;'>
                        <nobr><{$engine}></nobr>
                    </a>
                </li>
            <{/if}>

            <{if $numrows_keyword}>
                <li style='list-style: none; margin: 0px; display: inline; '>
                    <a href='<{$nav_keyword}>' style='padding: 1px 0.5em; margin-left: 1px; border: outset;'>
                        <nobr><{$keyword}></nobr>
                    </a>
                </li>
            <{/if}>

            <{if $numrows_query}>
                <li style='list-style: none; margin: 0px; display: inline; '>
                    <a href='<{$nav_query}>' style='padding: 1px 0.5em; margin-left: 1px; border: outset;'>
                        <nobr><{$query}></nobr>
                    </a>
                </li>
            <{/if}>

            <{if $numrows_robots}>
                <li style='list-style: none; margin: 0px; display: inline; '>
                    <a href='<{$nav_robot}>' style='padding: 1px 0.5em; margin-left: 1px; border: outset;'>
                        <nobr><{$robot}></nobr>
                    </a>
                </li>
            <{/if}>

            <{if $numrows_users}>
                <li style='list-style: none; margin: 0px; display: inline; '>
                    <a href='<{$nav_users}>' style='padding: 1px 0.5em; margin-left: 1px; border: outset;'>
                        <nobr><{$users}></nobr>
                    </a>
                </li>
            <{/if}>

            <{if $numrows_pages}>
                <li style='list-style: none; margin: 0px; display: inline; '>
                    <a href='<{$nav_page}>' style='padding: 1px 0.5em; margin-left: 1px; border: outset;'>
                        <nobr><{$page}></nobr>
                    </a>
                </li>
            <{/if}>
        </ul>
    </div>
</div>

<div class="itemText"><{$text}></div>
