# Plasma M komponent (Myeloma protein) type - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Plasma M komponent (Myeloma protein) type**

## ValueSet: Plasma M komponent (Myeloma protein) type (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MComponentTypeDAMYDA | *Version*:2.13.0 |
| Active as of 2022-06-08 | *Computable Name*:MComponentTypeDAMYDA |

 
Plasma M komponent (Myeloma protein) type [DAMYDA] 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "MComponentTypeDAMYDA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MComponentTypeDAMYDA",
  "version" : "2.13.0",
  "name" : "MComponentTypeDAMYDA",
  "title" : "Plasma M komponent (Myeloma protein) type",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-06-08T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Plasma M komponent (Myeloma protein) type [DAMYDA]",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MComponentType",
        "concept" : [
          {
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
          }
        ]
      }
    ]
  }
}

```
