# Komplikationer pga. 'Andre' - Procedurekoder (DUGA) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Komplikationer pga. 'Andre' - Procedurekoder (DUGA)**

## ValueSet: Komplikationer pga. 'Andre' - Procedurekoder (DUGA) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KomplAndreProcDUGA | *Version*:2.27.1 |
| Active as of 2024-02-21 | *Computable Name*:KomplAndreProcDUGA |

 
Komplikationer pga. 'Andre' - Procedurekoder (DUGA) 

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
  "id" : "KomplAndreProcDUGA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KomplAndreProcDUGA",
  "version" : "2.27.1",
  "name" : "KomplAndreProcDUGA",
  "title" : "Komplikationer pga. 'Andre' - Procedurekoder (DUGA)",
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
  "description" : "Komplikationer pga. 'Andre' - Procedurekoder (DUGA)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureUrogyn",
      "concept" : [{
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
        "code" : "KTLE10",
        "display" : "KTLE10: Fjernelse af fremmedlegeme fra vagina"
      },
      {
        "code" : "KTLW99B",
        "display" : "KTLW99B: Stramning af vaginal slynge"
      }]
    }]
  }
}

```
