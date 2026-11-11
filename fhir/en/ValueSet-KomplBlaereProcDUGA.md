# Komplikationer pga. blæretømningsbesvær - Procedurekoder (DUGA) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Komplikationer pga. blæretømningsbesvær - Procedurekoder (DUGA)**

## ValueSet: Komplikationer pga. blæretømningsbesvær - Procedurekoder (DUGA) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KomplBlaereProcDUGA | *Version*:2.27.2 |
| Active as of 2024-02-21 | *Computable Name*:KomplBlaereProcDUGA |

 
Komplikationer pga. blæretømningsbesvær - Procedurekoder (DUGA) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "KomplBlaereProcDUGA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KomplBlaereProcDUGA",
  "version" : "2.27.2",
  "name" : "KomplBlaereProcDUGA",
  "title" : "Komplikationer pga. blæretømningsbesvær - Procedurekoder (DUGA)",
  "status" : "active",
  "date" : "2024-02-21T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [{
    "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
    "telecom" : [{
      "system" : "url",
      "value" : "https://trifork.com"
    },
    {
      "system" : "email",
      "value" : "rbk@trifork.com"
    }]
  }],
  "description" : "Komplikationer pga. blæretømningsbesvær - Procedurekoder (DUGA)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureUrogyn",
      "concept" : [{
        "code" : "BJAZ0",
        "display" : "BJAZ0: Anlæggelse af blærekateter"
      },
      {
        "code" : "BJKA02",
        "display" : "BJKA02: Vejledning og undervisning i selvkateterisation"
      },
      {
        "code" : "BJAA0",
        "display" : "BJAA0: Engangskateterisation af blæren"
      },
      {
        "code" : "KLWW96",
        "display" : "KLWW96: Anden reoperation efter gynækologisk operation"
      },
      {
        "code" : "KLWW96A",
        "display" : "KLWW96A: Fjernelse af fremmedlegeme i bækkenhulen efter gynækologisk operation"
      },
      {
        "code" : "KLWW97A",
        "display" : "KLWW97A: Laparoskopisk fjernelse af fremmedlegeme i bækkenhulen efter gynækologisk operation"
      },
      {
        "code" : "KTLW99A",
        "display" : "KTLW99A: Løsning eller overskæring af vaginal slynge"
      },
      {
        "code" : "ZZ1295",
        "display" : "ZZ1295: Væske og vandladningsskema"
      }]
    }]
  }
}

```
