# Menisklæsion, medial/lateral (DKRR) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Menisklæsion, medial/lateral (DKRR)**

## ValueSet: Menisklæsion, medial/lateral (DKRR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MenisklaesionMedialLateralDKRR | *Version*:2.27.2 |
| Active as of 2022-09-19 | *Computable Name*:MenisklaesionMedialLateralDKRR |

 
Menisklæsion, medial/lateral (DKRR) 

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
  "id" : "MenisklaesionMedialLateralDKRR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MenisklaesionMedialLateralDKRR",
  "version" : "2.27.2",
  "name" : "MenisklaesionMedialLateralDKRR",
  "title" : "Menisklæsion, medial/lateral (DKRR)",
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
  "description" : "Menisklæsion, medial/lateral (DKRR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
      "concept" : [{
        "code" : "TUL9A",
        "display" : "Lateral læsion"
      },
      {
        "code" : "TUL9B",
        "display" : "Medial læsion"
      }]
    }]
  }
}

```
