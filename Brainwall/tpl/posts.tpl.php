
<article>
    <header>
        <h1>Titel: 
				<?= bereinige($p['titel']) ?></h1>
    </header>

    <p>
        
				
				<?= nl2br(bereinige($p['inhalt'])) ?>
				
    </p>

    <footer>
        <span>
            
            am
            <time datetime="<?= strftime('%Y-%m-%dT%H:%M:%S', $p['erstellt_am']) ?>">
                <?= strftime('%d.%m.%Y um %H:%M', $p['erstellt_am']) ?>
            </time>
        </span>
    </footer>
</article>