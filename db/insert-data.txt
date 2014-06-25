use programming_test

INSERT INTO colors
VALUES ('', 'Red'), ('', 'Orange'), ('', 'Yellow'), ('', 'Green'), ('', 'Blue'), ('', 'Indigo'), ('', 'Violet');


INSERT INTO votes (vote_id, color_id, city, votes) VALUES( '', (SELECT color_id from colors WHERE color='Blue'), 'Anchorage', 10000 ),
    ( '', (SELECT color_id from colors WHERE color='Yellow'), 'Anchorage', 15000 ),
    ( '', (SELECT color_id from colors WHERE color='Red'), 'Brooklyn', 100000 ),
    ( '', (SELECT color_id from colors WHERE color='Blue'), 'Brooklyn', 250000 ),
    ( '', (SELECT color_id from colors WHERE color='Red'), 'Detroit', 160000 ),
    ( '', (SELECT color_id from colors WHERE color='Yellow'), 'Selma', 15000 ),
    ( '', (SELECT color_id from colors WHERE color='Violet'), 'Selma', 5000 );
    