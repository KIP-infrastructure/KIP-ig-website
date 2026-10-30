# Plasma M komponent (Myeloma protein) type - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Plasma M komponent (Myeloma protein) type**

## ValueSet: Plasma M komponent (Myeloma protein) type 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MComponentTypeDAMYDA | *Version*:2.27.1 |
| Active as of 2022-06-08 | *Computable Name*:MComponentTypeDAMYDA |

 
Plasma M komponent (Myeloma protein) type [DAMYDA] 

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
  "id" : "MComponentTypeDAMYDA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MComponentTypeDAMYDA",
  "version" : "2.27.1",
  "name" : "MComponentTypeDAMYDA",
  "title" : "Plasma M komponent (Myeloma protein) type",
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
  "description" : "Plasma M komponent (Myeloma protein) type [DAMYDA]",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MComponentType",
      "concept" : [{
        "code" : "iga_kappa",
        "display" : "IgA kappa"
      },
      {
        "code" : "iga_lambda",
        "display" : "IgA lambda"
      },
      {
        "code" : "igg_kappa",
        "display" : "IgG kappa"
      },
      {
        "code" : "igg_lambda",
        "display" : "IgG lambda"
      },
      {
        "code" : "igm_kappa",
        "display" : "IgM kappa"
      },
      {
        "code" : "igm_lambda",
        "display" : "IgM lambda"
      },
      {
        "code" : "igd_kappa",
        "display" : "IgD kappa"
      },
      {
        "code" : "igd_lambda",
        "display" : "IgD lambda"
      },
      {
        "code" : "ige_kappa",
        "display" : "IgE kappa"
      },
      {
        "code" : "ige_lambda",
        "display" : "IgE lambda"
      },
      {
        "code" : "kappa",
        "display" : "Kappa (frie kæder)"
      },
      {
        "code" : "lambda",
        "display" : "Lambda (frie kæder)"
      }]
    }]
  }
}

```
