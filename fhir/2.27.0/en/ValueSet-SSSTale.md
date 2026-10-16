# Scandinavian Stroke Scale - Tale - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Scandinavian Stroke Scale - Tale**

## ValueSet: Scandinavian Stroke Scale - Tale 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SSSTale | *Version*:2.27.0 |
| Active as of 2022-06-23 | *Computable Name*:SSSTale |

 
Scandinavian Stroke Scale - Tale 

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
  "id" : "SSSTale",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SSSTale",
  "version" : "2.27.0",
  "name" : "SSSTale",
  "title" : "Scandinavian Stroke Scale - Tale",
  "status" : "active",
  "date" : "2022-06-23T00:00:00+02:00",
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
  "description" : "Scandinavian Stroke Scale - Tale",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SSSSpeech",
      "concept" : [{
        "code" : "10",
        "display" : "10: ingen afasi"
      },
      {
        "code" : "6",
        "display" : "6: begrænset ordforråd / usammenhængende tale"
      },
      {
        "code" : "3",
        "display" : "3: mere end ja og nej, men korte sætninger"
      },
      {
        "code" : "0",
        "display" : "0: højst ja eller nej"
      }]
    }]
  }
}

```
