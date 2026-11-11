# ASA klassifikation I-V - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ASA klassifikation I-V**

## ValueSet: ASA klassifikation I-V 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AsaIV | *Version*:2.27.3 |
| Active as of 2022-06-08 | *Computable Name*:AsaIV |

 
ASA klassifikation: De udvalgte koder for ASA fra I-V 

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
  "id" : "AsaIV",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AsaIV",
  "version" : "2.27.3",
  "name" : "AsaIV",
  "title" : "ASA klassifikation I-V",
  "status" : "active",
  "date" : "2022-06-08T00:00:00+02:00",
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
  "description" : "ASA klassifikation: De udvalgte koder for ASA fra I-V",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ASAClassification",
      "concept" : [{
        "code" : "asai",
        "display" : "ASA I - Rask patient"
      },
      {
        "code" : "asaii",
        "display" : "ASA II - Mild systemisk sygdom"
      },
      {
        "code" : "asaiii",
        "display" : "ASA III - Alvorlig systemisk sygdom"
      },
      {
        "code" : "asaiv",
        "display" : "ASA IV - Alvorlig systemisk sygdom, som er konstant livstruende"
      },
      {
        "code" : "asav",
        "display" : "ASA V - Moribund patient, som ikke forventes at overleve uden operation"
      }]
    }]
  }
}

```
