# RytmeAnalyseMetode - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **RytmeAnalyseMetode**

## ValueSet: RytmeAnalyseMetode 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/RytmeAnalyseMetode | *Version*:2.27.2 |
| Active as of 2022-06-29 | *Computable Name*:RytmeAnalyseMetode |

 
Metode til analyse af hjerterytme 

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
  "id" : "RytmeAnalyseMetode",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/RytmeAnalyseMetode",
  "version" : "2.27.2",
  "name" : "RytmeAnalyseMetode",
  "title" : "RytmeAnalyseMetode",
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
  "description" : "Metode til analyse af hjerterytme",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/DefibrilleringAnalyse",
      "concept" : [{
        "code" : "aed",
        "display" : "AED"
      },
      {
        "code" : "man_defibr",
        "display" : "Manuel defibrillator"
      },
      {
        "code" : "ekg",
        "display" : "Anden EKG-monitorering"
      }]
    }]
  }
}

```
