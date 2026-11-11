# Ja / Nej / Uvist / Ukendt / Relevant - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Ja / Nej / Uvist / Ukendt / Relevant**

## ValueSet: Ja / Nej / Uvist / Ukendt / Relevant 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/JaNejUvistUkendtIkkeRelevant | *Version*:2.27.2 |
| Active as of 2022-05-16 | *Computable Name*:JaNejUvistUkendtIkkeRelevant |

 
Giver mulighed for både måske og et ikke spurgt spørgsmål 

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
  "id" : "JaNejUvistUkendtIkkeRelevant",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/JaNejUvistUkendtIkkeRelevant",
  "version" : "2.27.2",
  "name" : "JaNejUvistUkendtIkkeRelevant",
  "title" : "Ja / Nej / Uvist / Ukendt / Relevant",
  "status" : "active",
  "date" : "2022-05-16T00:00:00+02:00",
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
  "description" : "Giver mulighed for både måske og et ikke spurgt spørgsmål",
  "compose" : {
    "include" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/v2-0532",
      "version" : "3.0.0",
      "concept" : [{
        "code" : "Y",
        "display" : "Ja"
      },
      {
        "code" : "N",
        "display" : "Nej"
      },
      {
        "code" : "ASKU",
        "display" : "Spurgt men uvist"
      },
      {
        "code" : "NASK",
        "display" : "Ikke spurgt"
      },
      {
        "code" : "NA",
        "display" : "Ikke relevant"
      }]
    }]
  }
}

```
