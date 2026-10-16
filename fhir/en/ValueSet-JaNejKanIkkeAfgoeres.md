# Ja / Nej / Kan ikke afgøres - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Ja / Nej / Kan ikke afgøres**

## ValueSet: Ja / Nej / Kan ikke afgøres 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/JaNejKanIkkeAfgoeres | *Version*:2.27.0 |
| Active as of 2022-05-16 | *Computable Name*:JaNejKanIkkeAfgoeres |

 
Undersøgt men resultat ikke entydigt / ukendt 

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
  "id" : "JaNejKanIkkeAfgoeres",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/JaNejKanIkkeAfgoeres",
  "version" : "2.27.0",
  "name" : "JaNejKanIkkeAfgoeres",
  "title" : "Ja / Nej / Kan ikke afgøres",
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
  "description" : "Undersøgt men resultat ikke entydigt / ukendt",
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
        "display" : "Kan ikke afgøres"
      }]
    }]
  }
}

```
