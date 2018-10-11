select location,gname,gid,cnt eventcount,ctag,count(members_tab.id) mcount from 
(select s.location, gname ,gid ,cnt ,GROUP_CONCAT(k.cat_name) ctag from
                                                                       (select group_id,cat_name,cat_id from group_cat_tab join cat_tab on(cat_tab.id=group_cat_tab.cat_id)) k 
                                                                         join (select group_name gname,group_tab.id gid ,group_tab.location, count(event_tab.id) cnt from group_tab  join event_tab on(group_tab.id=event_tab.group_id)
                                                                        group by  group_name,group_tab.id,group_tab.location) s  
  on (k.group_id=s.gid) group by s.gid ,s.cnt,s.gname,s.location) k left join  members_tab on (k.gid=members_tab.group_id)
group by location,gname,gid,eventcount,ctag