# Ja / Nej / Ukendt - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Ja / Nej / Ukendt**

## ValueSet: Ja / Nej / Ukendt 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/JaNejUkendt | *Version*:2.27.2 |
| Active as of 2022-06-07 | *Computable Name*:JaNejUkendt |

 
Giver mulighed for at svare ukendt til et spurgt spørgsmål 

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
  "id" : "JaNejUkendt",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/JaNejUkendt",
  "version" : "2.27.2",
  "name" : "JaNejUkendt",
  "title" : "Ja / Nej / Ukendt",
  "status" : "active",
  "date" : "2022-06-07T00:00:00+02:00",
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
  "description" : "Giver mulighed for at svare ukendt til et spurgt spørgsmål",
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
        "code" : "UNK",
        "display" : "Ukendt/Uoplyst"
      }]
    }]
  }
}

```
