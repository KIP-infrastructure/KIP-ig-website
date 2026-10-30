# Symptom skala - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Symptom skala**

## ValueSet: Symptom skala 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/Skala | *Version*:2.27.1 |
| Active as of 2024-04-18 | *Computable Name*:Skala |

 
Symptom skala 

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
  "id" : "Skala",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/Skala",
  "version" : "2.27.1",
  "name" : "Skala",
  "title" : "Symptom skala",
  "status" : "active",
  "date" : "2024-04-18T00:00:00+02:00",
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
  "description" : "Symptom skala",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/EORTCQLQC1514",
      "concept" : [{
        "code" : "grade_1",
        "display" : "Slet ikke"
      },
      {
        "code" : "grade_2",
        "display" : "Lidt"
      },
      {
        "code" : "grade_3",
        "display" : "Noget"
      },
      {
        "code" : "grade_4",
        "display" : "Meget"
      }]
    }]
  }
}

```
