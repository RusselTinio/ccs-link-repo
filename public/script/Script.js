$(document).ready(function(){
    $(".delete_btn").click(function(){
        const newsId = $(this).data('news-id');
        $("#deleteId").val(newsId);


    });
    
    $(".deleteeve_btn").click(function(){
        const newsId = $(this).data('news-id');
        $("#deleteEveId").val(newsId);


    });

    $(".edit_btn").click(function(){
        const newsId = $(this).data('news-id');
        const newsTitle = $(this).data('news-title');
        const newsDesc = $(this).data('news-desc');
        const newsDate = $(this).data('news-date');
        const newsCover = $(this).data('news-cover');
        $("#editId").val(newsId);
        $("#newsTitle").val(newsTitle);
        $("#newsDescription").val(newsDesc);
        $("#newsDate").val(newsDate);
        $("#newsCover").val(newsCover);



    });


    $(".editEve_btn").click(function(){
        const eventId = $(this).data('event-id');
        const eventTitle = $(this).data('event-title');
        const eventDesc = $(this).data('event-desc');
        const eventDate = $(this).data('event-date');
        const eventTime = $(this).data('event-time');
        const eventCover = $(this).data('event-cover');
        $("#editEveId").val(eventId);
        $("#eventsTitle").val(eventTitle);
        $("#eventsDescription").val(eventDesc);
        $("#eventsDate").val(eventDate);
        $("#eventsTime").val(eventTime);
        $("#eventsCover").val(eventCover);



    });

    $(".edit-news").click(function(){
        const newsId = $(this).data('news-id');
        $("#news_id").val(newsId);
        //alert(newsId);
       });   

    $(".delete-news").click(function(){
        const newsId = $(this).data('news-id');
        $("#news_id").val(newsId);
        //    alert(newsId);
    });

    $(".delete-events").click(function(){
        const eventsId = $(this).data('events-id');
        $("#events_id").val(eventsId);
        
    });
});

