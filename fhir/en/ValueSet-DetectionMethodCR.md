# Detection Method C/R - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Detection Method C/R**

## ValueSet: Detection Method C/R 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/DetectionMethodCR | *Version*:2.27.0 |
| Active as of 2022-07-18 | *Computable Name*:DetectionMethodCR |

 
Detection Method Clinical/Radiological 

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
  "id" : "DetectionMethodCR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/DetectionMethodCR",
  "version" : "2.27.0",
  "name" : "DetectionMethodCR",
  "title" : "Detection Method C/R",
  "status" : "active",
  "date" : "2022-07-18T00:00:00+02:00",
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
  "description" : "Detection Method Clinical/Radiological",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/DetectionMethods",
      "concept" : [{
        "code" : "clinical",
        "display" : "Klinisk bedømt"
      },
      {
        "code" : "radiological",
        "display" : "Radiologisk påvist"
      }]
    }]
  }
}

```
