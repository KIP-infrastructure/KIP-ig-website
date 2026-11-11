# Komponent - femur, status (DKR) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Komponent - femur, status (DKR)**

## ValueSet: Komponent - femur, status (DKR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KomponentFemurStatusDKR | *Version*:2.27.3 |
| Active as of 2022-10-13 | *Computable Name*:KomponentFemurStatusDKR |

 
Komponent - femur, status (DKR) 

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
  "id" : "KomponentFemurStatusDKR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KomponentFemurStatusDKR",
  "version" : "2.27.3",
  "name" : "KomponentFemurStatusDKR",
  "title" : "Komponent - femur, status (DKR)",
  "status" : "active",
  "date" : "2022-10-13T00:00:00+02:00",
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
  "description" : "Komponent - femur, status (DKR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "inserted",
        "display" : "Indsat"
      },
      {
        "code" : "not_replaced",
        "display" : "Ikke udskiftet (revision)"
      },
      {
        "code" : "other",
        "display" : "Andet"
      }]
    }]
  }
}

```
