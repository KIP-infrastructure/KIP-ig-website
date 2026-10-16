# Kromosom par - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Kromosom par**

## ValueSet: Kromosom par 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ChromosomPairs | *Version*:2.27.0 |
| Active as of 2022-07-14 | *Computable Name*:ChromosomPairs |

 
Kromosom par 

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
  "id" : "ChromosomPairs",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ChromosomPairs",
  "version" : "2.27.0",
  "name" : "ChromosomPairs",
  "title" : "Kromosom par",
  "status" : "active",
  "date" : "2022-07-14T00:00:00+02:00",
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
  "description" : "Kromosom par",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ChromosomPair",
      "concept" : [{
        "code" : "pair_13",
        "display" : "Kromosom 13 forandringer"
      },
      {
        "code" : "pair_17",
        "display" : "Kromosom 17 forandringer"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "none",
        "display" : "Ingen"
      },
      {
        "code" : "other",
        "display" : "Andet"
      }]
    }]
  }
}

```
