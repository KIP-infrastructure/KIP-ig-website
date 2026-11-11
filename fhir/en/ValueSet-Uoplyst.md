# Uoplyst (enkelt udfald) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Uoplyst (enkelt udfald)**

## ValueSet: Uoplyst (enkelt udfald) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/Uoplyst | *Version*:2.27.3 |
| Active as of 2022-07-07 | *Computable Name*:Uoplyst |

 
Giver mulighed for at svare ukendt/ukendt 

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
  "id" : "Uoplyst",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/Uoplyst",
  "version" : "2.27.3",
  "name" : "Uoplyst",
  "title" : "Uoplyst (enkelt udfald)",
  "status" : "active",
  "date" : "2022-07-07T00:00:00+02:00",
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
  "description" : "Giver mulighed for at svare ukendt/ukendt",
  "compose" : {
    "include" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/v2-0532",
      "version" : "3.0.0",
      "concept" : [{
        "code" : "UNK",
        "display" : "Uoplyst/ukendt"
      }]
    }]
  }
}

```
