# Menisklæsion, type (DKRR) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Menisklæsion, type (DKRR)**

## ValueSet: Menisklæsion, type (DKRR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MenisklaesionTypeDKRR | *Version*:2.27.0 |
| Active as of 2022-09-19 | *Computable Name*:MenisklaesionTypeDKRR |

 
Menisklæsion, type (DKRR) 

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
  "id" : "MenisklaesionTypeDKRR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MenisklaesionTypeDKRR",
  "version" : "2.27.0",
  "name" : "MenisklaesionTypeDKRR",
  "title" : "Menisklæsion, type (DKRR)",
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
  "description" : "Menisklæsion, type (DKRR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/LesionType",
      "concept" : [{
        "code" : "meniscal",
        "display" : "Menisklæsion"
      },
      {
        "code" : "root",
        "display" : "Rodlæsion"
      },
      {
        "code" : "ramp",
        "display" : "RAMP læsion"
      }]
    }]
  }
}

```
