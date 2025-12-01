# PatobankSNOMED - Diagnoser (LYFO) - KIP Infrastructure v2.14.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PatobankSNOMED - Diagnoser (LYFO)**

## ValueSet: PatobankSNOMED - Diagnoser (LYFO) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/PatobankSNOMEDDiagnoserLYFO | *Version*:2.14.2 |
| Active as of 2022-07-18 | *Computable Name*:PatobankSNOMEDDiagnoserLYFO |

 
PatobankSNOMED - Diagnoser (LYFO) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 42 concepts

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
  "id" : "PatobankSNOMEDDiagnoserLYFO",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/PatobankSNOMEDDiagnoserLYFO",
  "version" : "2.14.2",
  "name" : "PatobankSNOMEDDiagnoserLYFO",
  "title" : "PatobankSNOMED - Diagnoser (LYFO)",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-07-18T00:00:00+02:00",
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
  "description" : "PatobankSNOMED - Diagnoser (LYFO)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/PatobankSNOMED",
        "concept" : [
          {
            "code" : "M97283",
            "display" : "9728 - Precursor B lymphoblastic lymphoma"
          },
          {
            "code" : "M96703",
            "display" : "9670 - Small lymphocytic lymphoma"
          },
          {
            "code" : "M96713",
            "display" : "9671 - Lymphoplasmacytic lymphoma"
          },
          {
            "code" : "M96893",
            "display" : "9689 - Splenic marginal zone lymphoma"
          },
          {
            "code" : "M96993",
            "display" : "9699 - Marginal zone B-cell lymphoma"
          },
          {
            "code" : "M96733",
            "display" : "9673 - Mantle cell lymphoma"
          },
          {
            "code" : "M96793",
            "display" : "9679 - Mediastinal (thymic) large B-cell lymphoma"
          },
          {
            "code" : "M96803",
            "display" : "9680 - Diffuse large B-cell lymphoma"
          },
          {
            "code" : "M968H3",
            "display" : "968H - High Grade B-Lymfom"
          },
          {
            "code" : "M968I3",
            "display" : "968I - High Grade B-Lymfom med MYC og BCL2og/eller BCL-6"
          },
          {
            "code" : "M96783",
            "display" : "9678 - Primary effusion lymphoma"
          },
          {
            "code" : "M96873",
            "display" : "9687 - Burkitt lymphoma"
          },
          {
            "code" : "M97353",
            "display" : "9735 - Plasmablastisk lymfom"
          },
          {
            "code" : "M97373",
            "display" : "9737 - Storcellet ALK-positivt B-celle lymfom"
          },
          {
            "code" : "M99711",
            "display" : "9970 - Post-transplant lymphoproliferative disorder, polymorphic"
          },
          {
            "code" : "M97293",
            "display" : "9729 - Precursor T-lymphoblastic lymphoma"
          },
          {
            "code" : "M98273",
            "display" : "9827 - Adult T-cell lymphoma"
          },
          {
            "code" : "M97193",
            "display" : "9719 - Extranodal NK/Tcell lymphoma, nasal type"
          },
          {
            "code" : "M97173",
            "display" : "9717 - Enteropathy-type T-cell lymphoma"
          },
          {
            "code" : "M97163",
            "display" : "9716 - Hepatosplenic T-cell lymphoma"
          },
          {
            "code" : "M97023",
            "display" : "9702 - Peripheral T-cell lymphoma, unspecified"
          },
          {
            "code" : "M97053",
            "display" : "9705 - Angioimmunoblastic T-cell lymphoma"
          },
          {
            "code" : "M97143",
            "display" : "9714 - Anaplastic large cell lymphoma"
          },
          {
            "code" : "M97083",
            "display" : "9708 - Subcutaneous panniculitis-like T-cell lymphoma"
          },
          {
            "code" : "M97003",
            "display" : "9700 - Mycosis fungoides"
          },
          {
            "code" : "M97013",
            "display" : "9701 - Sezary syndrome"
          },
          {
            "code" : "M97183",
            "display" : "9718 - Primært kutant anaplastisk storcellet lymfom"
          },
          {
            "code" : "M97263",
            "display" : "9726 - Primært kutant gamma-delta T-celle lymfom"
          },
          {
            "code" : "M96593",
            "display" : "9659 - Nodular lymphocyte predominant Hodgkin lymphoma"
          },
          {
            "code" : "M96503",
            "display" : "9650 - Classical Hodgkin lymphoma"
          },
          {
            "code" : "M96633",
            "display" : "9663 - Nodular sclerosis classical Hodgkin lymphoma"
          },
          {
            "code" : "M96513",
            "display" : "9651 - Lymphocyte-rich classical Hodgkin lymphoma"
          },
          {
            "code" : "M96523",
            "display" : "9652 - Mixed cellularity classical Hodgkin lymphoma"
          },
          {
            "code" : "M96533",
            "display" : "9653 - Lymphocyte-depleted classical Hodgkin lymphoma"
          },
          {
            "code" : "M96103",
            "display" : "9610 - Modne B-cell neoplasier "
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/DiseasesUnspecified",
        "concept" : [
          {
            "code" : "M96903",
            "display" : "9690 - Follicular lymphoma"
          },
          {
            "code" : "M96913",
            "display" : "9691 - Follicular lymphoma grade I"
          },
          {
            "code" : "M96953",
            "display" : "9695 - Follicular lymphoma grade II"
          },
          {
            "code" : "M96983",
            "display" : "9698 - Follicular lymphoma grade III"
          },
          {
            "code" : "Primært_kutant_CD4_positivt_små_medium_T_celle_lymfom",
            "display" : "9706 - Primært kutant CD4-positivt små/medium T-celle lymfom "
          },
          {
            "code" : "Malignt_lymfom",
            "display" : "9590 - Malignant lymphoma, NOS "
          },
          {
            "code" : "non-Hodgkin_malignt_lymfom",
            "display" : "9591 - Malignant non-Hodgkin lymphoma, NOS "
          }
        ]
      }
    ]
  }
}

```
