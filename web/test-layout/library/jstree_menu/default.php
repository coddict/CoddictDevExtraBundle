        <script type="text/javascript">
            $(function () {
                $("#jstree").jstree({ 
                    "json_data" : {
                        "data" : [
                            { 
                                "data" : { 
                                    "title" : "Get Started", 
                                    "attr" : { "href" : "#" } 
                                },
                                "children" : [ 
                                    {
                                        "data" : { 
                                            "title" : "Signing Up", 
                                            "attr" : { "href" : "#" } 
                                        }
                                    },
                                    {
                                        "data" : { 
                                            "title" : "Logging In", 
                                            "attr" : { "href" : "#" } 
                                        }
                                    }
                                ]
                            },
                            {
                                "data" : { 
                                    "title" : "Manage Your Account", 
                                    "attr" : { "href" : "#" } 
                                },
                                "attr" : { "id" : "node1" },
                                "children" : [ 
                                    {
                                        "data" : { 
                                            "title" : "Account Settings", 
                                            "attr" : { "href" : "#" } 
                                        }
                                    },
                                    {
                                        "data" : { 
                                            "title" : "Warnings and Blocks", 
                                            "attr" : { "href" : "#" } 
                                        }
                                    },
                                    {
                                        "data" : { 
                                            "title" : "Reseting Your Password", 
                                            "attr" : { "href" : "#" }
                                        },
                                        "attr" : { "id" : "node2" },
                                        "children" : [ 
                                            {
                                                "data" : { 
                                                    "title" : "How Do I Reset My Password?", 
                                                    "attr" : { "href" : "#" } 
                                                },
                                                "attr" : { "id" : "node3" },
                                            },
                                            {
                                                "data" : { 
                                                    "title" : "I Forgot My Password", 
                                                    "attr" : { "href" : "#" } 
                                                }
                                            },
                                            {
                                                "data" : { 
                                                    "title" : "Can You Send Me a Copy of Password Without Reseting It?", 
                                                    "attr" : { "href" : "#" } 
                                                }
                                            },
                                            {
                                                "data" : { 
                                                    "title" : "How Can I Recover My Secret Question?",
                                                    "attr" : { "href" : "#" } 
                                                }
                                            }
                                        ]
                                    },
                                    {
                                        "data" : { 
                                            "title" : "Deactivating, Deleting, Saving", 
                                            "attr" : { "href" : "#" } 
                                        }
                                    },
                                    {
                                        "data" : { 
                                            "title" : "Downloading Your Info", 
                                            "attr" : { "href" : "#" } 
                                        }
                                    }
                                ]
                            },
                            {
                                "data" : { 
                                    "title" : "Security", 
                                    "attr" : { "href" : "#" } 
                                }
                            },
                            {
                                "data" : { 
                                    "title" : "Privacy", 
                                    "attr" : { "href" : "#" } 
                                }
                            }
                        ]
                    },
                    "plugins" : [ "themes", "json_data", "ui" ],
                    "ui" : {
                        "initially_select" : [ "node3" ]
                    },
                    "core" : {
                        "initially_open" : [ "node1" , "node2" ]
                    }
                });
            });
        </script>
        <div class="sidebarMenuHolder">
            <div class="JStree">
                <div class="Jstree_shadow_top"></div>
                <div id="jstree"></div>
                <div class="Jstree_shadow_bottom"></div>
            </div>
        </div>
