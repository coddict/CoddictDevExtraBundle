<? if(file_exists('library/jstree_menu/' . $filename . '.ini')) $jsTreeData = parse_ini_file('library/jstree_menu/' . $filename . '.ini', true); ?>
<? if(is_array($jsTreeData['link'])) { ?>
<script type="text/javascript">
    $(function () {
        $("#jstree").jstree({ 
            "json_data" : {
                "data" : [
                    <? foreach($jsTreeData['link'] as $val) { ?>
                    {
                        "data" : { 
                            "title" : "<?=$val?>", 
                            "attr" : { "href" : "#<?=str_replace(' ', '_', $val)?>" } 
                        }
                    },
                    <? } ?>
                ]
            },
            "plugins" : [ "themes", "json_data", "ui" ]
        })
        .bind("click.jstree", function (event) {
            var node = $(event.target).closest("li");
            document.location.href = node.find('a').attr("href");
            return false;
        })
        .delegate("a", "click", function (event, data) { event.preventDefault(); });
    });
</script>
<? } ?>
    <div class="sidebarMenuHolder">
        <div class="JStree">
            <div class="Jstree_shadow_top"></div>
            <div id="jstree"></div>
            <div class="Jstree_shadow_bottom"></div>
        </div>
    </div>