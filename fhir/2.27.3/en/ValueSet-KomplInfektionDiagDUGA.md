# Komplikationer pga. infektion eller erosion - Diagnosekoder (DUGA) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Komplikationer pga. infektion eller erosion - Diagnosekoder (DUGA)**

## ValueSet: Komplikationer pga. infektion eller erosion - Diagnosekoder (DUGA) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KomplInfektionDiagDUGA | *Version*:2.27.3 |
| Active as of 2024-02-21 | *Computable Name*:KomplInfektionDiagDUGA |

 
Komplikationer pga. infektion eller erosion - Diagnosekoder (DUGA) 

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
  "id" : "KomplInfektionDiagDUGA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KomplInfektionDiagDUGA",
  "version" : "2.27.3",
  "name" : "KomplInfektionDiagDUGA",
  "title" : "Komplikationer pga. infektion eller erosion - Diagnosekoder (DUGA)",
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
  "description" : "Komplikationer pga. infektion eller erosion - Diagnosekoder (DUGA)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureUrogyn",
      "concept" : [{
        "code" : "DT814F",
        "display" : "DT814F: Postoperativ sårinfektion"
      },
      {
        "code" : "DT814U",
        "display" : "DT814U: Postoperativ urinvejsinfektion"
      },
      {
        "code" : "DT835",
        "display" : "DT835: Infektion eller inflammation omkring protese, implantat eller transplantat i urinvejene"
      },
      {
        "code" : "DT836",
        "display" : "DT836: Infektion eller inflammation omkring protese, implantat eller transplantat i kønsorganerne"
      }]
    }]
  }
}

```
