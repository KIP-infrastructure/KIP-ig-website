# NIHSS - 9. Sprog - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **NIHSS - 9. Sprog**

## ValueSet: NIHSS - 9. Sprog 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/NIHSS9Sprog | *Version*:2.27.2 |
| Active as of 2022-06-27 | *Computable Name*:NIHSS9Sprog |

 
The National Institute of Health Stroke Scale (NIHSS) - 9. Sprog (bed patienten beskrive billeder, benævne genstande, læse sætninger) 

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
  "id" : "NIHSS9Sprog",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/NIHSS9Sprog",
  "version" : "2.27.2",
  "name" : "NIHSS9Sprog",
  "title" : "NIHSS - 9. Sprog",
  "status" : "active",
  "date" : "2022-06-27T00:00:00+02:00",
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
  "description" : "The National Institute of Health Stroke Scale (NIHSS) - 9. Sprog (bed patienten beskrive billeder, benævne genstande, læse sætninger)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/NIHSS9Language",
      "concept" : [{
        "code" : "0",
        "display" : "0 = Ingen afasi"
      },
      {
        "code" : "1",
        "display" : "1 = Let til moderat afasi"
      },
      {
        "code" : "2",
        "display" : "2 = Svær afasi"
      },
      {
        "code" : "3",
        "display" : "3 = Global afasi"
      }]
    }]
  }
}

```
