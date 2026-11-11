# Hjerterytme - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Hjerterytme**

## ValueSet: Hjerterytme 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/Hjerterytme | *Version*:2.27.2 |
| Active as of 2022-06-29 | *Computable Name*:Hjerterytme |

 
Analyse af hjerterytme 

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
  "id" : "Hjerterytme",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/Hjerterytme",
  "version" : "2.27.2",
  "name" : "Hjerterytme",
  "title" : "Hjerterytme",
  "status" : "active",
  "date" : "2022-06-29T00:00:00+02:00",
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
  "description" : "Analyse af hjerterytme",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/HjerterytmeAnalyse",
      "concept" : [{
        "code" : "non_stoed",
        "display" : "Ikke-stødbar rytme"
      },
      {
        "code" : "stoed",
        "display" : "Stødbar rytme"
      },
      {
        "code" : "ingen_rytmeana",
        "display" : "Ingen rytmeanalyse"
      }]
    }]
  }
}

```
