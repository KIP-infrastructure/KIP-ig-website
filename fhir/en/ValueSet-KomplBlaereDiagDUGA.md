# Komplikationer pga. blæretømningsbesvær - Diagnosekoder (DUGA) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Komplikationer pga. blæretømningsbesvær - Diagnosekoder (DUGA)**

## ValueSet: Komplikationer pga. blæretømningsbesvær - Diagnosekoder (DUGA) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KomplBlaereDiagDUGA | *Version*:2.27.3 |
| Active as of 2024-02-21 | *Computable Name*:KomplBlaereDiagDUGA |

 
Komplikationer pga. blæretømningsbesvær - Diagnosekoder (DUGA) 

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
  "id" : "KomplBlaereDiagDUGA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KomplBlaereDiagDUGA",
  "version" : "2.27.3",
  "name" : "KomplBlaereDiagDUGA",
  "title" : "Komplikationer pga. blæretømningsbesvær - Diagnosekoder (DUGA)",
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
  "description" : "Komplikationer pga. blæretømningsbesvær - Diagnosekoder (DUGA)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureUrogyn",
      "concept" : [{
        "code" : "DR339D",
        "display" : "DR339D: Residualurin"
      },
      {
        "code" : "DR391",
        "display" : "DR391: Vandladningsbesvær UNS"
      }]
    }]
  }
}

```
