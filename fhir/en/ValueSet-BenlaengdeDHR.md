# Benlængde (DHR) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Benlængde (DHR)**

## ValueSet: Benlængde (DHR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/BenlaengdeDHR | *Version*:2.27.0 |
| Active as of 2022-11-15 | *Computable Name*:BenlaengdeDHR |

 
Benlængde (DHR) 

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
  "id" : "BenlaengdeDHR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/BenlaengdeDHR",
  "version" : "2.27.0",
  "name" : "BenlaengdeDHR",
  "title" : "Benlængde (DHR)",
  "status" : "active",
  "date" : "2022-11-15T00:00:00+02:00",
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
  "description" : "Benlængde (DHR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Intervals",
      "concept" : [{
        "code" : "=<1",
        "display" : "Lige lange +/- 1 cm"
      },
      {
        "code" : "1-2",
        "display" : "1-2 cm forskel"
      },
      {
        "code" : "2-3",
        "display" : "2-3 cm forskel"
      },
      {
        "code" : ">3",
        "display" : ">3 cm"
      }]
    }]
  }
}

```
