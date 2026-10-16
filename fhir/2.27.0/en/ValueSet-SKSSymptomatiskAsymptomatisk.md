# SKS: Symptomatisk/Asymptomatisk koder - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SKS: Symptomatisk/Asymptomatisk koder**

## ValueSet: SKS: Symptomatisk/Asymptomatisk koder 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SKSSymptomatiskAsymptomatisk | *Version*:2.27.0 |
| Active as of 2022-06-21 | *Computable Name*:SKSSymptomatiskAsymptomatisk |

 
SKS koderne for symptomatisk/asymptomatisk 

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
  "id" : "SKSSymptomatiskAsymptomatisk",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SKSSymptomatiskAsymptomatisk",
  "version" : "2.27.0",
  "name" : "SKSSymptomatiskAsymptomatisk",
  "title" : "SKS: Symptomatisk/Asymptomatisk koder",
  "status" : "active",
  "date" : "2022-06-21T00:00:00+02:00",
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
  "description" : "SKS koderne for symptomatisk/asymptomatisk",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
      "concept" : [{
        "code" : "ZDI021",
        "display" : "Asymptomatisk"
      },
      {
        "code" : "ZDI022",
        "display" : "Symptomatisk"
      }]
    }]
  }
}

```
