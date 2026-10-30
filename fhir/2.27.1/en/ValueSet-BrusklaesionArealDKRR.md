# Brusklæsion, areal (DKRR) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Brusklæsion, areal (DKRR)**

## ValueSet: Brusklæsion, areal (DKRR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/BrusklaesionArealDKRR | *Version*:2.27.1 |
| Active as of 2022-09-19 | *Computable Name*:BrusklaesionArealDKRR |

 
Brusklæsion, areal (DKRR) 

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
  "id" : "BrusklaesionArealDKRR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/BrusklaesionArealDKRR",
  "version" : "2.27.1",
  "name" : "BrusklaesionArealDKRR",
  "title" : "Brusklæsion, areal (DKRR)",
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
  "description" : "Brusklæsion, areal (DKRR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Intervals",
      "concept" : [{
        "code" : "=<2",
        "display" : "=<2 cm2"
      },
      {
        "code" : ">2",
        "display" : ">2 cm2"
      }]
    }]
  }
}

```
