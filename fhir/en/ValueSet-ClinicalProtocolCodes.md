# Kliniske protokolleret koder - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Kliniske protokolleret koder**

## ValueSet: Kliniske protokolleret koder 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ClinicalProtocolCodes | *Version*:2.27.2 |
| Active as of 2022-07-13 | *Computable Name*:ClinicalProtocolCodes |

 
Kode til en klinisk protokolleret undersøgelse 

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
  "id" : "ClinicalProtocolCodes",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ClinicalProtocolCodes",
  "version" : "2.27.2",
  "name" : "ClinicalProtocolCodes",
  "title" : "Kliniske protokolleret koder",
  "status" : "active",
  "date" : "2022-07-13T00:00:00+02:00",
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
  "description" : "Kode til en klinisk protokolleret undersøgelse",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ClinicalProtocolCodes",
      "concept" : [{
        "code" : "mrc_18",
        "display" : "MRC-18"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden"
      }]
    }]
  }
}

```
