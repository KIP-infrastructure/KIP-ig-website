# Ja / Nej / Ikke faglig relevant - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Ja / Nej / Ikke faglig relevant**

## ValueSet: Ja / Nej / Ikke faglig relevant 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/JaNejIkkefagligrelevant | *Version*:2.27.1 |
| Active as of 2022-09-06 | *Computable Name*:JaNejIkkefagligrelevant |

 
Dækker over Ja/nej/ikke faglig relevant. 

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
  "id" : "JaNejIkkefagligrelevant",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/JaNejIkkefagligrelevant",
  "version" : "2.27.1",
  "name" : "JaNejIkkefagligrelevant",
  "title" : "Ja / Nej / Ikke faglig relevant",
  "status" : "active",
  "date" : "2022-09-06T00:00:00+02:00",
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
  "description" : "Dækker over Ja/nej/ikke faglig relevant.",
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
        "code" : "NA",
        "display" : "Ikke faglig relevant"
      }]
    }]
  }
}

```
