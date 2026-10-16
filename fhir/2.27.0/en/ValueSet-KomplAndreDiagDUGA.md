# Komplikationer pga. 'Andre' - Diagnosekoder (DUGA) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Komplikationer pga. 'Andre' - Diagnosekoder (DUGA)**

## ValueSet: Komplikationer pga. 'Andre' - Diagnosekoder (DUGA) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KomplAndreDiagDUGA | *Version*:2.27.0 |
| Active as of 2024-02-21 | *Computable Name*:KomplAndreDiagDUGA |

 
Komplikationer pga. 'Andre' - Diagnosekoder (DUGA) 

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
  "id" : "KomplAndreDiagDUGA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KomplAndreDiagDUGA",
  "version" : "2.27.0",
  "name" : "KomplAndreDiagDUGA",
  "title" : "Komplikationer pga. 'Andre' - Diagnosekoder (DUGA)",
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
  "description" : "Komplikationer pga. 'Andre' - Diagnosekoder (DUGA)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureUrogyn",
      "concept" : [{
        "code" : "DN393",
        "display" : "DN393: Stress-inkontinens"
      },
      {
        "code" : "DN895D",
        "display" : "DN895D: Vaginal striktur"
      },
      {
        "code" : "DR102B",
        "display" : "DR102B: Mavesmerter lokaliseret til bækken"
      },
      {
        "code" : "DR522B",
        "display" : "DR522B: Smerter i kønsorganer"
      },
      {
        "code" : "DT983C",
        "display" : "DT983C: Postoperativ seksuel dysfunktion"
      }]
    }]
  }
}

```
