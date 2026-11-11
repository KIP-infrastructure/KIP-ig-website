# Komplikationer pga. blødning - Diagnosekoder (DUGA) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Komplikationer pga. blødning - Diagnosekoder (DUGA)**

## ValueSet: Komplikationer pga. blødning - Diagnosekoder (DUGA) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KomplBloedDiagDUGA | *Version*:2.27.2 |
| Active as of 2024-02-21 | *Computable Name*:KomplBloedDiagDUGA |

 
Komplikationer pga. blødning - Diagnosekoder (DUGA) 

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
  "id" : "KomplBloedDiagDUGA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KomplBloedDiagDUGA",
  "version" : "2.27.2",
  "name" : "KomplBloedDiagDUGA",
  "title" : "Komplikationer pga. blødning - Diagnosekoder (DUGA)",
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
  "description" : "Komplikationer pga. blødning - Diagnosekoder (DUGA)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureUrogyn",
      "concept" : [{
        "code" : "DT810G",
        "display" : "DT810G: Postoperativ blødning UNS"
      },
      {
        "code" : "DT810H",
        "display" : "DT810H: Postoperativt hæmatom UNS"
      },
      {
        "code" : "DT818F",
        "display" : "DT818F: Peroperativ blødning UNS"
      }]
    }]
  }
}

```
