# WebShopPhp

Kravspecifikation på projektet:
 1.Alla sidor skall vara responsiva. (G) 

 2.Arbetet ska implementeras med objektorienterade principer. (G)

 3.Skapa ett konceptuellt ER diagram, detta ska lämnas in vid idégodkännandet G)

 4.Beskriv er företagsidé i en kort muntlig presentation vid idégodkännandet (G)

 5.Det skall finnas en kortare text som beskriver erat projekt i er readme.md (G)

 6.All data som programmet utnyttjar ska vara sparat i en MYSQL databas (produkter, beställningar, konton mm. Ej kundvagn) (G)

 7.Det ska finnas ett normaliserat diagram över databasen i ert Github-Repo (G)

 8.Man ska kunna logga in som administratör i systemet (G)

 9.Inga Lösenord får sparas i klartext i databasen (G)

 10.En besökare ska kunna beställa produkter från sidan, detta ska uppdatera lagersaldot i databasen (G)

 11.Administratörer ska kunna uppdatera antalet produkter i lager från admin delen av sidan (G)


 12.Administratörer ska kunna se en lista på alla gjorda beställningar (G)


 13.Sidans produkter ska delas upp i kategorier, en produkt ska tillhöra minst en kategori, men kan tillhöra flera (G)

 14.Från hemsidan ska man kunna se en lista över alla produkter, och man ska kunna lista bara dom produkter som tillhör en kategori (G)

 15.Kunder ska kunna lägga produkterna i en kundkorg, som är sparad i session på servern (G)Året är 1992, Waynes World och Charlie Moongår på biograferna. Janne Kemi är en finsk ultramiljonär som bestämt sig för att satsa på en ny e-handeln. Han vill investera i fyra stycken nya hemsidor. Han har anlitat er för att ta fram dessa sidor.Han har vissa specifika krav från sin IT avdelning som han bifogat som en kravspecifikation. Förutom det har ni fria händer att ta fram en grym idé och tjäna sjuka pengar (åt Janne).

16.Man ska från hemsidan kunna skriva upp sig för att få butikens nyhetsbrev genom att ange sitt namn och epostadress (G)

17.Administratörer ska kunna se en lista över personer som vill ha nyhetsbrevet och deras epost adresser (G)

18.Alla kunder skall sparas i databasen och innehålla minst Förnamn (string), Efternamn (string), Adress (string) och om hen godkänner köpevillkoren (boolean) (G)

19.Kunder ska kunna välja ett av flera fraktalternativ (G)

20.Tillgängliga fraktalternativ ska vara hämtade från databasen (G)

21.När man gör en beställning ska Kunden också få chansen att skriva upp sig för nyhetsbrevet (VG). 

22.Kunden måste ha ett registrerat konto för att få göra ett köp (registreringsfunktion skall finnas.Tänk på att en administratör också kan vara en kund (VG)

23.När man är inloggad som kund ska man kunna se sina gjorda beställning och om det är skickade eller inte (VG)

24.Man ska kunna ansöka om att bli administratör på sidan, endast befintliga administratörer kan godkänna dessa (måste finnas ett gränssnitt för detta) (VG)       

25.En administratör behöver godkännas av en tidigare administratör innan man kan logga in som administratör (VG)

26.Administratörer ska kunna redigera vilka kategorier en produkt tillhör (VG)

27.Administratörer ska kunna skicka nyhetsbrev från sitt gränssnitt, nyhetsbrevet ska sparas i databasen samt innehålla en titel och en brödtext (VG)

28.Som inloggad kund ska man kunna markera sin beställning som mottagen, detta skall sparas i databasen (VG)

29.Administratörer ska kunna lägga till och ta bort produkter (VG)

30.Om en produkt är slut i saldo skall detta visas på sidan. Kunden skall inte heller kunna köpa denna produkt tills positivt saldo finns (VG).

31.Administratörer ska kunna markera beställningar som skickade och se vilka ordrar som blivit mottagna (VG)