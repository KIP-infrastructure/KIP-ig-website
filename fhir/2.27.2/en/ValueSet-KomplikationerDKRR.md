# Komplikationer (DKRR) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Komplikationer (DKRR)**

## ValueSet: Komplikationer (DKRR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KomplikationerDKRR | *Version*:2.27.2 |
| Active as of 2022-09-19 | *Computable Name*:KomplikationerDKRR |

 
Komplikationer (DKRR) 

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
  "id" : "KomplikationerDKRR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KomplikationerDKRR",
  "version" : "2.27.2",
  "name" : "KomplikationerDKRR",
  "title" : "Komplikationer (DKRR)",
  "status" : "active",
  "date" : "2022-09-19T00:00:00+02:00",
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
  "description" : "Komplikationer (DKRR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Complications",
      "concept" : [{
        "code" : "infection",
        "display" : "Infektion"
      },
      {
        "code" : "dvt",
        "display" : "DVT"
      },
      {
        "code" : "movement_restriction",
        "display" : "Bevægeindskrænkning(> 5 graders ext., > 10 graders fleksion indskrækning)"
      },
      {
        "code" : "chronic_pain",
        "display" : "Kronisk smerter"
      },
      {
        "code" : "reoperation",
        "display" : "Reoperation"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden komplikation"
      }]
    }]
  }
}

```
